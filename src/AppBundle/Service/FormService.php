<?php
namespace AppBundle\Service;

class FormService extends AbstractService
{
    public function save($entity)
    {
        try {
            $this->em->persist($entity);
            $this->em->flush($entity);
        } catch (Exception $e) {
            throw new Exception('Erro ao salvar entidade: ' . get_class($entity));
        }
    }
    
    public function delete($entity)
    {
        try {
            $this->em->remove($entity);
            $this->em->flush($entity);
        } catch (Exception $e) {
            throw new Exception('Erro ao deletar entidade: ' . get_class($entity));
        }
    }
}